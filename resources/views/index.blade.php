<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Online Resume</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/resume-logo.png') }}" /> 
    <!-- You can link CSS files here -->
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> <!-- Example for linking CSS --> --}}
</head>
<body>
@foreach($resumes as $resume) 
    <h1>Genesis Navales</h1>

    <h2>Contact Information</h2>
    <p>Email: {{ $resume->email }}</p>  
    <p>Phone: {{ $resume->phone }}</p>

    <h2>Summary</h2>
    <p>{{ $resume->summary }}</p>

    <h2>Experience</h2>
    <ul>
        @foreach(explode(',', $resume->experience) as $job)
            <li>{{ $job }}</li>
        @endforeach
    </ul>

    <h2>Education</h2>
    <ul>
        @foreach(explode(',', $resume->education) as $edu)
            <li>{{ $edu }}</li>
        @endforeach
    </ul>

    <h2>Skills</h2>
    <ul>
        @foreach(explode(',', $resume->skills) as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
@endforeach
</body>
</html>
