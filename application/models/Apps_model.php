<?php
class Blog_model extends CI_Model {

        public $title;
        public $content;
        public $date;
        

        public function read()
        {
                $query = $this->db->get('apps', 10);
                return $query->result();
        }

        public function create()
        {

    $data = array(
        'title' => $this->input->post('title'),
        'text' => $this->input->post('text');
        'works' => $this->input->post('works');
    );

    return $this->db->insert('apps', $data);
        }

        public function update()
        {
                $this->title    = $this->input->post('title');
                $this->content  = $this->input->post('content');

                $this->db->update('apps', $this, array('id' => $_POST['id']));
        }

}

?>