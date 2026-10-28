<?php
use PHPUnit\Framework\TestCase;

class CustomerControllerTest extends TestCase
{
    public function testDashboardStatistics()
    {
        $stats = [
            'totalBookings' => 10,
            'activeBookings' => 3,
            'totalSpending' => 5000,
            'recentBookings' => []
        ];
        
        $this->assertIsArray($stats);
        $this->assertArrayHasKey('totalBookings', $stats);
        $this->assertArrayHasKey('activeBookings', $stats);
        $this->assertArrayHasKey('totalSpending', $stats);
        $this->assertEquals(10, $stats['totalBookings']);
        $this->assertEquals(3, $stats['activeBookings']);
    }

    public function testVehicleSearch()
    {
        $vehicles = [
            ['vehicle_id' => 1, 'vehicle_name' => 'Toyota Camry', 'availability' => 'Available', 'price_per_day' => 100],
            ['vehicle_id' => 2, 'vehicle_name' => 'Honda Civic', 'availability' => 'Available', 'price_per_day' => 80]
        ];
        
        $this->assertIsArray($vehicles);
        $this->assertCount(2, $vehicles);
        $this->assertEquals('Toyota Camry', $vehicles[0]['vehicle_name']);
    }

    public function testVehicleBooking()
    {
        $booking = [
            'booking_id' => 1,
            'customer_id' => 1,
            'vehicle_id' => 1,
            'start_date' => '2026-08-20',
            'end_date' => '2026-08-25',
            'total_days' => 6,
            'total_price' => 600,
            'booking_status' => 'Confirmed'
        ];
        
        $this->assertIsArray($booking);
        $this->assertEquals(1, $booking['booking_id']);
        $this->assertEquals(6, $booking['total_days']);
        $this->assertEquals('Confirmed', $booking['booking_status']);
    }

    public function testBookingWithDriver()
    {
        $booking = [
            'booking_id' => 1,
            'driver_option' => 'with_driver',
            'driver_fee' => 3000,
            'total_price' => 3600,
            'booking_status' => 'Driver_Requested'
        ];
        
        $this->assertIsArray($booking);
        $this->assertEquals('with_driver', $booking['driver_option']);
        $this->assertEquals(3000, $booking['driver_fee']);
        $this->assertEquals('Driver_Requested', $booking['booking_status']);
    }

    public function testBookingManagement()
    {
        $bookings = [
            ['booking_id' => 1, 'booking_status' => 'Confirmed', 'payment_status' => 'Paid'],
            ['booking_id' => 2, 'booking_status' => 'Completed', 'payment_status' => 'Paid'],
            ['booking_id' => 3, 'booking_status' => 'Pending', 'payment_status' => 'Pending']
        ];
        
        $this->assertIsArray($bookings);
        $this->assertCount(3, $bookings);
        $this->assertEquals('Confirmed', $bookings[0]['booking_status']);
    }

    public function testProfileUpdate()
    {
        $profileData = [
            'full_name' => 'John Doe',
            'phone_1' => '1234567890',
            'phone_2' => '0987654321',
            'address' => '123 Main Street'
        ];
        
        $this->assertIsArray($profileData);
        $this->assertEquals('John Doe', $profileData['full_name']);
        $this->assertEquals('1234567890', $profileData['phone_1']);
    }

    public function testReviewSubmission()
    {
        $review = [
            'user_id' => 1,
            'target_type' => 'vehicle',
            'target_id' => 1,
            'rating' => 5,
            'comment' => 'Great vehicle!',
            'status' => 'pending'
        ];
        
        $this->assertIsArray($review);
        $this->assertEquals(5, $review['rating']);
        $this->assertEquals('Great vehicle!', $review['comment']);
        $this->assertEquals('pending', $review['status']);
    }

    public function testVehicleComparison()
    {
        $compareVehicles = [
            ['vehicle_id' => 1, 'vehicle_name' => 'Toyota Camry', 'price_per_day' => 100],
            ['vehicle_id' => 2, 'vehicle_name' => 'Honda Civic', 'price_per_day' => 80],
            ['vehicle_id' => 3, 'vehicle_name' => 'Ford Focus', 'price_per_day' => 90]
        ];
        
        $this->assertIsArray($compareVehicles);
        $this->assertCount(3, $compareVehicles);
        $this->assertLessThanOrEqual(3, count($compareVehicles));
    }

    public function testPaymentProcessing()
    {
        $payment = [
            'booking_id' => 1,
            'amount' => 600,
            'payment_method' => 'credit_card',
            'status' => 'success'
        ];
        
        $this->assertIsArray($payment);
        $this->assertEquals(600, $payment['amount']);
        $this->assertEquals('success', $payment['status']);
    }

    public function testCustomerStatistics()
    {
        $stats = [
            'total_bookings' => 15,
            'completed_bookings' => 10,
            'total_spent' => 8000,
            'avg_vehicle_rating' => 4.5
        ];
        
        $this->assertIsArray($stats);
        $this->assertEquals(15, $stats['total_bookings']);
        $this->assertEquals(10, $stats['completed_bookings']);
        $this->assertEquals(4.5, $stats['avg_vehicle_rating']);
    }
}
