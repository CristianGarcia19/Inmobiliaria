<aside id="sidebar" class="sidebar-toggle bg-primary p-0">
            <div class="sidebar-logo d-flex align-items-center justify-content-center px-0 py-3">
                <div class="sidebar-logo p-0 mx-2">
                    <img src="../public/img/logodash.png" alt="logo-dashboard" class="logo-dashboard">
                </div>
                <a href="../views/dashboard.php">Inmoweb</a>
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav p-0">
                <li class="sidebar-item">
                    <a href="../views/dashboard.php" class="sidebar-link">
                        <i class="bi bi-house-door"></i>
                        <span>Inicio</span>
                    </a>
                </li>
                <li class="sidebar-header">
                    Configuración
                </li>
                <li class="sidebar-item">
                    <a href="../views/perfil.php" class="sidebar-link">
                        <i class="bi bi-person"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                
                <li class="sidebar-header">
                    Paginas
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-person-video2"></i>
                        <span>Agentes</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="../views/agentes.php" class="sidebar-link">
                            <i class="bi bi-people"></i>    
                            Lista de agentes</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="../views/admAgentes.php" class="sidebar-link">
                            <i class="bi bi-person-add"></i>   
                            Crear agentes</a>
                        </li>
                    </ul>
                </li>
                
                
            </ul>
            <!-- Sidebar Navigation Ends -->
            <div class="sidebar-footer pb-2">
                <a href="../controllers/cerrarsesion.php" class="sidebar-link">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </aside>