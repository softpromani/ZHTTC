@component('mail::message')
# Hello {{ $data->email }}

Thanks for submitting the survey.

@component('mail::panel')
    **Survey Details:**
@endcomponent

@component('mail::table')
    | Title           | Answer          |
    | --------------- |:---------------:|
    | College Name    | {{ $data->college_name }} |
    | Age             | {{ $data->age }}          |
    | Phone           | {{ $data->phone }}        |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
