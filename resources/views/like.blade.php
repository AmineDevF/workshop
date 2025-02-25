<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-time Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My App</a>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="badge bg-danger" id="notificationCount">0</span> 🔔
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="notificationDropdown" id="notificationList">
                        <li class="dropdown-item">No new notifications</li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    

    <script>
        let userId = @json(auth()->id());

        // Initialize Pusher
        var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        var channel = pusher.subscribe('my-channel');

        channel.bind("Illuminate\\Notifications\\Events\\BroadcastNotificationCreated", function(data) {
            console.log("my data",data);
            let notificationCount = parseInt(document.getElementById('notificationCount').textContent);
            notificationCount++;
            document.getElementById('notificationCount').textContent = notificationCount;

            // Add notification to dropdown
            let notificationList = document.getElementById('notificationList');
            notificationList.innerHTML = `<li class="dropdown-item">${data.content}</li>` + notificationList.innerHTML;

            // Play notification sound
           
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
