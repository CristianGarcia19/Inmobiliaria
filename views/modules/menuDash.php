<aside id="sidebar" class="sidebar-toggle bg-primary p-0">
            <div class="sidebar-logo d-flex align-items-center justify-content-center px-0 py-3">
                <div class="sidebar-logo p-0 mx-2">
                    <img src="../public/img/logodash.png" alt="logo-dashboard" class="logo-dashboard">
                </div>
                <a href="#">Inmoweb</a>
            </div>
            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav p-0">
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
                        data-bs-target="#auth" aria-expanded="true" aria-controls="auth">
                        <i class="bi bi-shield-check"></i>
                        <span>Autenticación</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Registro</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-bell"></i>
                        <span>Notification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="bi bi-gear"></i>
                        <span>Setting</span>
                    </a>
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