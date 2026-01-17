<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public function get_teams()
    {
        $this->db->select('*, CONCAT(first_name, " ", last_name) AS name');
        return $this->db->from('teams')->get()->result();
    }
    public function get_contacts()
    {
        $this->db->select('*');
        return $this->db->from('contact')->get()->result();
    }
    public function get_services()
    {
        $this->db->select('*');
        return $this->db->from('services')->get()->result();
    }
    public function get_service($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        return $this->db->from('services')->get()->row();
    }
    public function get_localities()
    {
        $this->db->select('*');
        return $this->db->from('kolkata_localities')->get()->result();
    }
    public function get_bookings()
    {
        $this->db->select('*, (SELECT name FROM services WHERE id = bookings.service_id) as service');
        return $this->db->from('bookings')->get()->result();
    }
    public function get_team($id)
    {
        $this->db->select('*, CONCAT(first_name, " ", last_name) AS name');
        $this->db->where('id', $id);
        return $this->db->from('teams')->get()->row();
    }
    public function get_booking($id)
    {
        $this->db->select('*, (SELECT name FROM services WHERE id = bookings.service_id) as service');
        $this->db->where('id', $id);
        return $this->db->from('bookings')->get()->row();
    }
    public function get_contact($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        return $this->db->from('contact')->get()->row();
    }
    public function insert_team($data)
    {
        return $this->db->insert('teams', $data);
    }
    public function update_team($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('teams');
    }
    public function delete_team($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('teams');
    }
    public function get_instruments()
    {
        $this->db->select('*');
        return $this->db->from('instruments')->get()->result();
    }
    public function get_instrument($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        return $this->db->from('instruments')->get()->row();
    }
    public function insert_instrument($data)
    {
        return $this->db->insert('instruments', $data);
    }
    public function update_instrument($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('instruments');
    }
    public function delete_instrument($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('instruments');
    }
    public function insert_booking($data)
    {
        return $this->db->insert('bookings', $data);
    }
    public function insert_contact($data)
    {
        return $this->db->insert('contact', $data);
    }
    public function get_config()
    {
        $this->db->select('*');
        return $this->db->from('config')->get()->row();
    }
    public function update_config($data)
    {
        $this->db->set($data);
        return $this->db->update('config');
    }
    public function insert_visitor()
    {
        $env = parse_ini_file('.env');
        $visitor_ip = $_SERVER['REMOTE_ADDR'];
        $page = $_SERVER['REQUEST_URI'];
        if ($env['ENV'] === 'dev') {
            $page = str_replace("/critihome/index.php", "", $page);
        }
        $this->db->where('visitor_ip', $visitor_ip);
        $this->db->where('page', $page);
        $count = $this->db->from('visitors')->get()->num_rows();
        if ($count == 0) {
            return $this->db->insert('visitors', ['visitor_ip' => $visitor_ip, 'page' => $page]);
        }
    }
    public function get_articles()
    {
        $this->db->select('*, (SELECT name FROM users WHERE id = articles.user_id) as added_by');
        $this->db->where('is_delete', 0);
        return $this->db->from('articles')->get()->result();
    }
    public function get_article($id)
    {
        $this->db->select('*, (SELECT name FROM users WHERE id = articles.user_id) as added_by');
        $this->db->where('id', $id);
        return $this->db->from('articles')->get()->row();
    }
    public function insert_article($data)
    {
        return $this->db->insert('articles', $data);
    }
    public function update_article($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('articles');
    }
    public function delete_article($id)
    {
        $this->db->set(['is_delete' => 1]);
        $this->db->where('id', $id);
        return $this->db->update('articles');
    }
    public function get_feedbacks()
    {
        return $this->db->from('feedbacks')->get()->result();
    }
    public function get_feedback($id)
    {
        $this->db->where('id', $id);
        return $this->db->from('feedbacks')->get()->row();
    }
    public function insert_feedback($data)
    {
        return $this->db->insert('feedbacks', $data);
    }
    public function update_feedback($data, $id)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('feedbacks');
    }
    public function delete_feedback($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('feedbacks');
    }
}