@section('sidebar')
<aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt20">Menu</li>
            
            <li>
                <a href="<?php //echo $this->Html->url(array('controller' => 'Tareas', 'action' => 'index')); ?>">
                    <span class="fa fa-tasks"></span>
                    <span class="sidebar-title">TAREAS</span>
                </a>
            </li>
            <li>
                <a href="<?php //echo $this->Html->url(array('controller' => 'Reportes', 'action' => 'reporte_general')); ?>">
                    <span class="fa fa-tasks"></span>
                    <span class="sidebar-title">Reporte</span>
                </a>
            </li>
        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
        <!-- End: Sidebar Collapse Button -->

    </div>
    <!-- End: Sidebar Left Content -->

</aside>
@stop