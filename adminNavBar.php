<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <title>Admin Nav Bar</title>
</head>

<body style="overflow-x: hidden;">

    <div class="bg-gray-100">


        <!-- Sidebar -->
        <div class="absolute w-64 min-h-screen overflow-y-auto text-white transition-transform duration-300 ease-in-out transform -translate-x-full bg-gray-800"
            id="sidebar">
            <!-- Your Sidebar Content -->
            <div class="p-4">
                <h1 class="text-2xl font-semibold">MENU</h1>
                <ul class="mt-4">
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="" class="block ">Home</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="adminDashBoard.php" class="block" >User Status Update</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="productActiv.php" class="block">Product Status Update</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="adminAddproduct.php" class="block">Add Produt</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="adminProduct.php" class="block">Stock Management</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-300 hover:text-black"><a href="repoart.php" class="report.php">Reports</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-200 hover:text-black"><a href="activeUserReport.php" class="report.php">Active Users</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-200 hover:text-black"><a href="deactiveUserReprt.php" class="report.php">Deactive Users</a></li>
                    <li class="px-3 py-4 mb-2 font-bold rounded-xl hover:bg-pink-200 hover:text-black"><a href="adminReportUser.php" class="report.php">Oder</a></li>

                </ul>
            </div>
        </div>

        <!-- Content -->
        <div class="flex flex-col flex-1 w-screen overflow-hidden">
            <!-- Navbar -->
            <div class="bg-white shadow">
                <div class="container mx-auto">
                    <div class="flex items-center justify-between px-2 py-4">
                        <h1 class="text-xl font-bold">Admin DashBoard</h1>

                        <button class="text-gray-500 hover:text-gray-600" id="open-sidebar">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Content Body -->
        
        </div>
    </div>

    <script>
    const sidebar = document.getElementById('sidebar');
    const openSidebarButton = document.getElementById('open-sidebar');

    openSidebarButton.addEventListener('click', (e) => {
        e.stopPropagation();
        sidebar.classList.toggle('-translate-x-full');
    });

    // Close the sidebar when clicking outside of it
    document.addEventListener('click', (e) => {
        if (!sidebar.contains(e.target) && !openSidebarButton.contains(e.target)) {
            sidebar.classList.add('-translate-x-full');
        }
    });
    </script>

    </div>







    <script src="script.js"></script>
</body>

</html>