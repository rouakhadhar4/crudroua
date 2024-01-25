
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ecf0f5; /* Updated background color */
        }

        .dashboard-container {
            display: flex;
            flex-grow: 1;
            background-color: #ecf0f5; /* Updated background color */
        }


        .sidebar {
            background-color: #9DB4C0;
            color: white;
            width: 250px;
            padding: 20px;
            min-height: 100%;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 15px;
            transition: background-color 0.3s;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .sidebar a:hover {
            background-color: #2c3e50;
        }

        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #253237;
            color: white;
            padding: 16px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        .search-bar {
            width: 250px;
            margin-right: 20px;
        }

        .footer {
            background-color: #253237;
            color: white;
            padding: 11px 0;
            text-align: center;
            margin-top: auto;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-box {
            background-color: #3498db;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .info-box i {
            font-size: 30px;
            margin-right: 15px;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-list li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
</div>

<div class="dashboard-container">
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="http://localhost:8081/index.php/acceuil">Home</a>
        <a href="http://localhost:8081/index.php/categories">Categories</a>
        <a href="#">Articles</a>
        <a href="#">Orders</a>
        <a href="#">Contacts</a>
        <a href="http://localhost:8081/index.php/admin">Logout</a>
    </div>

    <div class="container mt-5 content">
    <div class="card mx-auto" style="max-width: px;">
    <div class="card-header" style="background-color: #3498db; color: white; text-align: center;">
           
            <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header" style="background-color: #3498db; color: white; text-align: center;">
        <h2 class="mb-0">Edit Category</h2>
    </div>
    <div class="card-body" style="max-height: 500px; overflow-y: auto;">
        <?= form_open("/categories/update/{$category['idcategory']}", ['class' => 'mt-4']); ?>
        <div class="mb-3">
            <label for="nomcategory" class="form-label">Category Name:</label>
            <input type="text" name="nomcategory" class="form-control" value="<?= esc($category['nomcategory']); ?>" required>
        </div>

        <div class="d-grid">
            <button type="submit" style="background-color: #3498db; color: white; text-align: center;">Update</button>
        </div>
        <?= form_close(); ?>
    </div>
</div>
    </div>


 </div>
</div>
</div>

<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>42 Boulevard Albert 1 er – 06600 – ANTIBES</p>
            </div>
            <div class="col-md-4">
                <p>contact@palacedesign.fr</p>
            </div>
            <div class="col-md-4">
                <p>+33. (0) 6.09.18.75.74</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
