<?php

require_once 'vendor/autoload.php';

use Illuminate\Support\Facades\Mail;

// Load Laravel application
$app = require_once 'bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

try {
    Mail::raw('This is a test email from your portfolio contact form.', function ($message) {
        $message->to('mo7ammaddev@gmail.com')
                ->subject('Portfolio Test Email')
                ->from('mo7ammaddev@gmail.com', 'Portfolio Test');
    });
    
    echo "✅ Email sent successfully!\n";
    
} catch (Exception $e) {
    echo "❌ Email failed: " . $e->getMessage() . "\n";
    echo "Error details: " . $e->getTraceAsString() . "\n";
}
