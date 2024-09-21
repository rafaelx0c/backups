// SIDEBAR TOGGLE

let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}


// Function to show the dashboard content
function showDashboard() {
  document.getElementById('dashboard-content').classList.remove('hidden');
  document.getElementById('main-content').classList.remove('hidden');
}

// Function to show only the home content (hide dashboard content)
function showHome() {
  document.getElementById('dashboard-content').classList.add('hidden');
  document.getElementById('main-content').classList.add('hidden');
}

// Event listeners for sidebar items
document.querySelector('.sidebar-list-item:nth-child(1)').addEventListener('click', showDashboard);
document.querySelector('.sidebar-list-item:nth-child(2)').addEventListener('click', showHome);




