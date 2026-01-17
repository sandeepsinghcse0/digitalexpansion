<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'bookings';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name', 'phone_number', 'email', 'address', 'service_id', 'booking_date'
        // Include all columns you allow for mass assignment
    ];

    public function insertBooking($data)
    {
        return $this->insert($data);
    }
}
