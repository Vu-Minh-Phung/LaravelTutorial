@if (session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
@if (session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif
@if (session('warning'))
    <div style="color: orange;">{{ session('warning') }}</div>
@endif
