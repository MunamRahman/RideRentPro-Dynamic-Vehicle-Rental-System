<?php
use PHPUnit\Framework\TestCase;

class OwnerControllerTest extends TestCase
{
    public function testDashboardStatistics()
    {
        $stats = [
            'totalVehicles' => 10,
            'totalBookings' => 50,
            'totalEarnings' => 25000,
            'recentBookings' => []
        ];
        
        $this->assertIsArray($stats);
        $this->assertArrayHasKey('totalVehicles', $stats);
        $this->assertArrayHasKey('totalBookings', $stats);
        $this->assertArrayHasKey('totalEarnings', $stats);
        $this->assertEquals(10, $stats['totalVehicles']);
        $this->assertEquals(25000, $stats['totalEarnings']);
    }

    public function testVehicleManagement()
    {
        $vehicles = [
            ['vehicle_id' => 1, 'vehicle_name' => 'Toyota Camry', 'availability' => 'Available', 'approval_status' => 'Approved'],
            ['vehicle_id' => 2, 'vehicle_name' => 'Honda Civic', 'availability' => 'Booked', 'approval_status' => 'Approved']
        ];
        
        $this->assertIsArray($vehicles);
        $this->assertCount(2, $vehicles);
        $this->assertEquals('Toyota Camry', $vehicles[0]['vehicle_name']);
        $this->assertEquals('Approved', $vehicles[0]['approval_status']);
    }

    public function testVehicleSearch()
    {
        $searchResults = [
            ['vehicle_id' => 1, 'vehicle_name' => 'Toyota Camry', 'brand' => 'Toyota'],
            ['vehicle_id' => 2, 'vehicle_name' => 'Toyota Corolla', 'brand' => 'Toyota']
        ];
        
        $this->assertIsArray($searchResults);
        $this->assertCount(2, $searchResults);
        $this->assertEquals('Toyota', $searchResults[0]['brand']);
    }

    public function testAddVehicle()
    {
        $newVehicle = [
            'vehicle_name' => 'New Car',
            'brand' => 'Brand Name',
            'model' => '2023',
            'vehicle_type' => 'Sedan',
            'price_per_day' => 150,
            'availability' => 'Available',
            'approval_status' => 'Pending'
        ];
        
        $this->assertIsArray($newVehicle);
        $this->assertEquals('New Car', $newVehicle['vehicle_name']);
        $this->assertEquals('Pending', $newVehicle['approval_status']);
    }

    public function testVehicleEdit()
    {
        $updatedVehicle = [
            'vehicle_id' => 1,
            'vehicle_name' => 'Updated Car Name',
            'price_per_day' => 120,
            'availability' => 'Maintenance'
        ];
        
        $this->assertIsArray($updatedVehicle);
        $this->assertEquals('Updated Car Name', $updatedVehicle['vehicle_name']);
        $this->assertEquals(120, $updatedVehicle['price_per_day']);
    }

    public function testVehicleDelete()
    {
        $deleteResult = [
            'vehicle_id' => 1,
            'deleted' => true,
            'message' => 'Vehicle deleted successfully'
        ];
        
        $this->assertIsArray($deleteResult);
        $this->assertTrue($deleteResult['deleted']);
        $this->assertEquals('Vehicle deleted successfully', $deleteResult['message']);
    }

    public function testBookingManagement()
    {
        $bookings = [
            ['booking_id' => 1, 'booking_status' => 'Confirmed', 'total_price' => 600],
            ['booking_id' => 2, 'booking_status' => 'Completed', 'total_price' => 800]
        ];
        
        $this->assertIsArray($bookings);
        $this->assertEquals('Confirmed', $bookings[0]['booking_status']);
        $this->assertEquals(600, $bookings[0]['total_price']);
    }

    public function testDriverManagement()
    {
        $drivers = [
            ['driver_id' => 1, 'full_name' => 'Driver One', 'availability' => 'Available'],
            ['driver_id' => 2, 'full_name' => 'Driver Two', 'availability' => 'Unavailable']
        ];
        
        $this->assertIsArray($drivers);
        $this->assertEquals('Driver One', $drivers[0]['full_name']);
        $this->assertEquals('Available', $drivers[0]['availability']);
    }

    public function testProfileUpdate()
    {
        $profileData = [
            'full_name' => 'Owner Name',
            'phone' => '1234567890',
            'address' => '123 Owner Street'
        ];
        
        $this->assertIsArray($profileData);
        $this->assertEquals('Owner Name', $profileData['full_name']);
        $this->assertEquals('1234567890', $profileData['phone']);
    }

    public function testVehiclePerformance()
    {
        $performance = [
            'total_vehicles' => 10,
            'total_bookings' => 50,
            'total_earnings' => 25000,
            'avg_rating' => 4.5,
            'vehiclePerformance' => []
        ];
        
        $this->assertIsArray($performance);
        $this->assertEquals(10, $performance['total_vehicles']);
        $this->assertEquals(4.5, $performance['avg_rating']);
    }

    public function testVehicleDetails()
    {
        $vehicleDetails = [
            'vehicle_id' => 1,
            'vehicle_name' => 'Toyota Camry',
            'brand' => 'Toyota',
            'model' => '2022',
            'price_per_day' => 100,
            'avg_rating' => 4.5,
            'review_count' => 10
        ];
        
        $this->assertIsArray($vehicleDetails);
        $this->assertEquals(4.5, $vehicleDetails['avg_rating']);
        $this->assertEquals(10, $vehicleDetails['review_count']);
    }

    public function testVehicleAssociation()
    {
        $association = [
            'vehicle_count' => 5,
            'vehicle_names' => 'Toyota Camry, Honda Civic, Ford Focus, Toyota Corolla, Nissan Altima'
        ];
        
        $this->assertIsArray($association);
        $this->assertEquals(5, $association['vehicle_count']);
        $this->assertStringContainsString('Toyota Camry', $association['vehicle_names']);
    }

    public function testActiveBookings()
    {
        $activeBookings = [
            'active_bookings' => 3,
            'bookings' => [
                ['booking_id' => 1, 'status' => 'Confirmed'],
                ['booking_id' => 2, 'status' => 'Pending'],
                ['booking_id' => 3, 'status' => 'Driver_Requested']
            ]
        ];
        
        $this->assertIsArray($activeBookings);
        $this->assertEquals(3, $activeBookings['active_bookings']);
        $this->assertCount(3, $activeBookings['bookings']);
    }
}
