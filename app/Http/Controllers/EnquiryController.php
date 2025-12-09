<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $user= User::where('role', 'user')->get();
        return view('admin.enquiry.index', compact('user'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date_of_arrival'   => 'required|date|after_or_equal:today',
            'date_of_departure'=> 'required|date|after_or_equal:date_of_arrival',
            'number_of_guests' => 'required|integer|min:1',
            'no_of_bedrooms' => 'required|string|max:255',
            'bedroom_type' => 'required|string|max:255',
            'cruise_type' => 'required|string|max:255',
            'notes' => 'nullable|string|max:1000',
        ]);


     User::create($validatedData);

  $whatsappMessage = "HouseBoat Enquiry:\n";
    $whatsappMessage .= "Date of Arrival: " . $validatedData['date_of_arrival'] . "\n";
    $whatsappMessage .= "Date of Departure: " . $validatedData['date_of_departure'] . "\n";
    $whatsappMessage .= "Number of Guests: " . $validatedData['number_of_guests'] . "\n";
    $whatsappMessage .= "Number of Bedrooms: " . $validatedData['no_of_bedrooms'] . "\n";
    $whatsappMessage .= "Bedroom Type: " . $validatedData['bedroom_type'] . "\n";
    $whatsappMessage .= "Cruise Type: " . $validatedData['cruise_type'] . "\n";
    $whatsappMessage .= "Additional Notes: " . ($validatedData['notes'] ?? 'N/A') . "\n";

$encodedMessage = urlencode($whatsappMessage);

$whatsappNumber = "919072461237";

$whatsappUrl = "https://wa.me/{$whatsappNumber}?text={$encodedMessage}";

return redirect()->away($whatsappUrl);


        return redirect()->back()->with('success', 'Your enquiry has been submitted successfully.');
    }
}
