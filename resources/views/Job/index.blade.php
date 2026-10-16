<div>
   <h1>Job Board</h1>
   @foreach ($jobs as $job)
    <div>
        <h3>name: {{ $job['Name'] }}</h3>
        <p>Job title: {{ $job['Job title'] }}</p>
        <p>Salary: {{ $job['Salary'] }}</p>
        <p>Location: {{ $job['Location'] }}</p>
        <p>.......................................................................</p>
    </div>
   
   @endforeach
</div>