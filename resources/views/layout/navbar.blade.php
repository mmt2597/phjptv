<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">JPTV</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->is('fee') ? 'active' : '' }}">
                <a class="nav-link" href="fee">Fee</a>
            </li>
            <li class="nav-item {{ request()->is('faq') ? 'active' : '' }}">
                <a class="nav-link" href="faq">Q & A</a>
            </li>
            <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}">
                <a class="nav-link" href="contact-us">Contact Us</a>
            </li>
            <li class="nav-item {{ request()->is('order') ? 'active' : '' }}">
                <a class="nav-link" href="order">Order</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>