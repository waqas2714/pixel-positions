@props(['employer', 'width' => 90])
@php
    // Check if the employer logo exists and is in the correct format
    $logoPath = $employer->logo ?? '';
    $usePlaceholder = !preg_match('/^logos\/[a-zA-Z0-9]+\.(jpg|jpeg|png|gif)$/', $logoPath);
    $imagePath = $usePlaceholder 
        ? 'http://picsum.photos/seed/' . rand(0, 10000) . '/' . $width . '/' . $width 
        : asset('storage/' . $logoPath);
@endphp
<img src="{{ $imagePath }}" alt="{{ $employer->name }} Logo" class="rounded-xl" width="{{ $width }}">
