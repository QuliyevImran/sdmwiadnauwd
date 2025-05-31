<?php
use PHPUnit\Framework\TestCase;

class UserAuthTest extends TestCase
{
    public function testRegistration()
    {
        // Simulate form data
        $_POST['username'] = 'testuser';
        $_POST['email'] = 'test@example.com';
        $_POST['password'] = 'password123';

        // Include the registration script
        ob_start();
        include 'register.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Registration successful', $output);
    }

    public function testLogin()
    {
        // Simulate form data
        $_POST['email'] = 'test@example.com';
        $_POST['password'] = 'password123';

        // Include the login script
        ob_start();
        include 'login.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Login successful', $output);
    }
}
