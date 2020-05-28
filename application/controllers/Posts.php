<?php
   class Posts extends CI_Controller {
        public function index() {
            $data['title'] = 'derniers messages';
            $data['posts'] = $this->post_model->get_posts();
            

            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($slug = NULL) {
            $data['post'] = $this->post_model->get_posts($slug);

            if(empty($data['post'])) {
                show_404();
            }

            $data['title'] = $data['post']['title'];

            //vue des slug
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
        public function create() {

            $data['title'] = 'creation d\'un post';
            $data['categories'] = $this->post_model->get_categories();
            $this->form_validation->set_rules('title','titre','required');
            $this->form_validation->set_rules('body','post','required');
            if($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
            } else {
                $config['upload_path'] = './assets/img/posts';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '800000'; //octet
                $config['max_width'] = '500';
                $config['max_height'] = '500';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()) {
                    $errors = array('error' => $this->upload->display_errors());
                    $post_img = 'noimage.jpg';
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $post_img = $_FILES['userfile']['name'];
                }

                $this->post_model->create_post($post_img);
                redirect('posts');
            }

        }

        public function delete($id) {
            $this->post_model->delete_post($id);
            redirect('posts');
        }
        
        //modif
        public function edit($slug) {
            $data['post'] = $this->post_model->get_posts($slug);
            $data['categories'] = $this->post_model->get_categories();
            if(empty($data['post'])) {
                show_404();
            }

            $data['title'] = 'Ecrire un post';
            $this->load->view('templates/header');
            $this->load->view('posts/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update() {
            $this->post_model->update_post();
            redirect('posts');

        }
}