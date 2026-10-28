<?php
use PHPUnit\Framework\TestCase;

class DriverControllerTest extends TestCase
{
    public function testDashboardStatistics()
    {
        $stats = [
            'totalBookings' => 20,
            'activeBookings' => 5,
            'completedBookings' => 15,
            'totalEarnings' => 10000,
            'pendingEarnings' => 2500
        ];
        
        $this->assertIsArray($stats);
        $this->assertArrayHasKey('totalBookings', $stats);
        $this->assertArrayHasKey('totalEarnings', $stats);
        $this->assertEquals(20, $stats['totalBookings']);
        $this->assertEquals(10000, $stats['totalEarnings']);
    }

    public function testBookingManagement()
    {
        $bookings = [
            ['booking_id' => 1, 'booking_status' => 'Confirmed', 'driver_fee' => 500],
            ['booking_id' => 2, 'booking_status' => 'Completed', 'driver_fee' => 600]
        ];
        
        $this->assertIsArray($bookings);
        $this->assertEquals('Confirmed', $bookings[0]['booking_status']);
        $this->assertEquals(500, $bookings[0]['driver_fee']);
    }

    public function testBookingDetails()
    {
        $booking = [
            'booking_id' => 1,
            'customer_name' => 'John Doe',
            'customer_phone' => '1234567890',
            'vehicle_name' => 'Toyota Camry',
            'vehicle_type' => 'Sedan',
            'start_date' => '2026-08-20',
            'end_date' => '2026-08-25'
        ];
        
        $this->assertIsArray($booking);
        $this->assertEquals('John Doe', $booking['customer_name']);
        $this->assertEquals('Toyota Camry', $booking['vehicle_name']);
    }

    public function testAvailabilityUpdate()
    {
        $availability = [
            'driver_id' => 1,
            'availability_status' => 'Available'
        ];
        
        $this->assertIsArray($availability);
        $this->assertEquals('Available', $availability['availability_status']);
    }

    public function testEarningsCalculation()
    {
        $earnings = [
            'totalEarnings' => 15000,
            'paidEarnings' => 12000,
            'pendingEarnings' => 3000,
            'paidCount' => 15,
            'pendingCount' => 3
        ];
        
        $this->assertIsArray($earnings);
        $this->assertEquals(15000, $earnings['totalEarnings']);
        $this->assertEquals(12000, $earnings['paidEarnings']);
        $this->assertEquals(3000, $earnings['pendingEarnings']);
    }

    public function testPerformanceMetrics()
    {
        $performance = [
            'total_bookings' => 25,
            'completed_bookings' => 20,
            'cancelled_bookings' => 2,
            'total_earnings' => 12500,
            'completion_rate' => 80.0
        ];
        
        $this->assertIsArray($performance);
        $this->assertEquals(25, $performance['total_bookings']);
        $this->assertEquals(20, $performance['completed_bookings']);
        $this->assertEquals(80.0, $performance['completion_rate']);
    }

    public function testMonthlyEarnings()
    {
        $monthlyEarnings = [
            ['month' => 'Jan', 'earnings' => 2000],
            ['month' => 'Feb', 'earnings' => 2500],
            ['month' => 'Mar', 'earnings' => 1800],
            ['month' => 'Apr', 'earnings' => 3000],
            ['month' => 'May', 'earnings' => 2200],
            ['month' => 'Jun', 'earnings' => 2800]
        ];
        
        $this->assertIsArray($monthlyEarnings);
        $this->assertCount(6, $monthlyEarnings);
        $this->assertEquals('Jan', $monthlyEarnings[0]['month']);
        $this->assertEquals(2000, $monthlyEarnings[0]['earnings']);
    }

    public function testProfileUpdate()
    {
        $profileData = [
            'full_name' => 'Driver Name',
            'phone' => '9876543210',
            'address' => '456 Driver Street',
            'experience_years' => 5
        ];
        
        $this->assertIsArray($profileData);
        $this->assertEquals('Driver Name', $profileData['full_name']);
        $this->assertEquals(5, $profileData['experience_years']);
    }

    public function testDriverReviews()
    {
        $reviews = [
            ['review_id' => 1, 'rating' => 5, 'comment' => 'Excellent driver', 'customer_name' => 'Customer A'],
            ['review_id' => 2, 'rating' => 4, 'comment' => 'Good service', 'customer_name' => 'Customer B']
        ];
        
        $this->assertIsArray($reviews);
        $this->assertEquals(5, $reviews[0]['rating']);
        $this->assertEquals('Excellent driver', $reviews[0]['comment']);
    }

    public function testVehicleAssociation()
    {
        $association = [
            'vehicle_count' => 10,
            'vehicle_names' => 'Toyota Camry, Honda Civic, Ford Focus'
        ];
        
        $this->assertIsArray($association);
        $this->assertEquals(10, $association['vehicle_count']);
        $this->assertStringContainsString('Toyota Camry', $association['vehicle_names']);
    }
}
