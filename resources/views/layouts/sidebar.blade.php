@extends('layouts.app')

@section('profil')
<div class="profile clearfix">
  <div class="profile_info">
    <span>Welcome,</span>
      <h2>{{ Auth::user()->name }}</h2>
  </div>
</div>
@endsection

@section('footer_sidebar')
<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
@endsection


@section('sidebar')
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> My room <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php foreach ($acaras as $acar ): ?>
                      <li><a href="{{ route('room') }}"><?php echo $acar -> name; ?></a></li>
                      <?php endforeach; ?>
                    </ul>
                  </li>
    </ul>
  </div>
</div>
@endsection
