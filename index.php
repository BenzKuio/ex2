<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Database Form</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

</head>

<body>
    <div class="menu">

        <ul>
            <li><a href="#insert" id="link1">Insert</a></li>
            <li><a href="#select" id="link2">table</a></li>
        </ul>
    </div>
    <!-- <br> -->
    <hr>

    <div id="box1">
        <form id="userForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>
        <!-- <div id="message"></div> -->
    </div>
    <div id="box2">
        <table id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>

</html>

<script>
    // JavaScript to handle the box switching
    const link1 = document.getElementById('link1');
    const link2 = document.getElementById('link2');
    const box1 = document.getElementById('box1');
    const box2 = document.getElementById('box2');

    link1.addEventListener('click', () => {
        box1.style.display = 'block';
        box2.style.display = 'none';
    });

    link2.addEventListener('click', () => {
        box1.style.display = 'none';
        box2.style.display = 'block';
    });
</script>

</body>

</html>