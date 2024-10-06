# Ticket Reservation System

## Features

### Admin Panel
- **List All Reservations/Bookings**: View all reservations made by users.
- **Reject Reservation**: Admin can reject/cancel a reservation.

### Users Side
- **Automatic Generate Reference Number**: A unique reference number is generated for each booking.
- **Re-Print Tickets**: Users can re-print their tickets.
- **Reserve Ticket**: Users can reserve tickets for their journey.
- **Generate Printable Ticket**: Users can generate a printable version of their ticket.

## How it Works

1. **Reference Number Generation**: The user waits for the automatic reference number to be generated.
2. **Reserve a Ticket**: The user clicks the "Done! Proceed" button to begin the ticket reservation process.
3. **Travel & Booking Info**: The user fills in the necessary traveling and booking information.
4. **Contact Information**: The user then fills out their contact information.
5. **Payment & Verification**: The user selects their method of payment and verifies the details.
6. **Review & Confirm**: The user reviews and confirms the information provided.
7. **Print Ticket**: The user prints the generated ticket.

## How to Run

### Requirements
- Local web server such as **XAMPP** or **WAMP**.
- The provided source code.

### Installation/Setup

1. **Start Server**: Open your XAMPP/WAMP Control Panel and start the **Apache** and **MySQL** services.
2. **Download Source Code**: Download the provided source code zip file.
3. **Extract Files**: Extract the downloaded zip file.
4. **Move Files**:
   - For **XAMPP**: Move the extracted folder to the `htdocs` directory.
   - For **WAMP**: Move the extracted folder to the `www` directory.
5. **Create Database**: Open [PHPMyAdmin](http://localhost/phpmyadmin) in your browser.
6. **Create a New Database**: Create a database named `booking_db`.
7. **Import SQL File**: Import the `booking_db.sql` file located in the `dbengine` folder.
8. **Run the Application**: Open the Ticket Reservation System in your browser: [http://localhost/Ticket_Reservation_system](http://localhost/Ticket_Reservation_system).

## Admin Access
- **Username**: `admin`
- **Password**: `password`
