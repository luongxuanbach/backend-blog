<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin.post.index') }}">
            <span class="align-middle">Admin page</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('admin.category.index')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.category.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Category</span>
                </a>
                <a class="sidebar-link" href="{{route('admin.category.create')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Create Category</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.post.index')}}">
                    <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Post</span>
                </a>
                <a class="sidebar-link" href="{{route('admin.post.create')}}">
                    <i class="align-middle" data-feather="archive"></i> <span class="align-middle">Add Post</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.contact.index')}}">
                    <i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contact</span>
                </a>
            </li>
            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.comment.index')}}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Comment</span>
                </a>
            </li> --}}

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin.user.index')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">User</span>
                </a>
                <a class="sidebar-link" href="{{route('admin.user.create')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Create User</span>
                </a>
            </li>

            {{-- <li class="sidebar-header">
                Tools & Components
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-forms.html">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li>

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="charts-chartjs.html">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="maps-google.html">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul> --}}

        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <strong class="d-inline-block mb-2">Power by bachlx</strong>
                <div class="mb-3 text-sm">
                    Hotline 0869207696
                </div>
                <div class="d-grid">
                    <a href="upgrade-to-pro.html" class="btn btn-primary">Support me</a>
                </div>
            </div>
        </div>
    </div>
</nav>
