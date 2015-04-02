<!-- list -->
<ul class="nav">
  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
    <span>Navigation</span>
  </li>
  <li>
    <a href class="auto">      
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
      <span class="font-bold">Dashboard</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Dashboard</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.dashboard-v1">
          <span>Dashboard v1</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.dashboard-v2">
          <b class="label bg-info pull-right">N</b>
          <span>Dashboard v2</span>
        </a>
      </li>
    </ul>
  </li>
  <li ui-sref-active="active">
    <a ui-sref="app.calendar">
      <i class="glyphicon glyphicon-calendar icon text-info-dker"></i>
      <span class="font-bold">Calendar</span>
    </a>
  </li>
  <li ui-sref-active="active">
    <a ui-sref="app.mail.list">
      <b class="badge bg-info pull-right">9</b>
      <i class="glyphicon glyphicon-envelope icon text-info-lter"></i>
      <span class="font-bold">Email</span>
    </a>
  </li>
  <li>
    <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-th-large icon text-success"></i>
      <span class="font-bold">Apps</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Apps</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="apps.note">
          <span>Note</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="apps.contact">
          <span>Contacts</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.weather">
          <span>Weather</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="line dk"></li>

  <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
    <span>Components</span>
  </li>
  <li>
    <a href class="auto">      
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <b class="badge bg-info pull-right">3</b>
      <i class="glyphicon glyphicon-th"></i>
      <span>Layout</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Layout</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="layout.app">
          <span>Application</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="layout.fullwidth">
          <span>Full width</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="layout.mobile">
          <span>Mobile</span>
        </a>
      </li>      
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.ui')}">
    <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-briefcase icon"></i>
      <span>UI Kits</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>UI Kits</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.buttons">
          <span>Buttons</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.icons">
          <b class="badge bg-info pull-right">3</b>
          <span>Icons</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.grid">
          <span>Grid</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.widgets">
          <b class="badge bg-success pull-right">13</b>
          <span>Widgets</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.bootstrap">
          <b class="badge bg-primary pull-right">16</b>
          <span>Bootstrap</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.sortable">
          <span>Sortable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.portlet">
          <span>Portlet</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.timeline">
          <span>Timeline</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.tree">
          <span>Tree</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.toaster">
          <span>Toaster</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.jvectormap">
          <span>Vector Map</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.ui.googlemap">
          <span>Google Map</span>
        </a>
      </li>
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.table')}">
    <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <b class="label bg-primary pull-right">2</b>
      <i class="glyphicon glyphicon-list"></i>
      <span>Table</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Table</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.table.static">
          <span>Table static</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.table.datatable">
          <span>Datatable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.table.footable">
          <span>Footable</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.table.grid">
          <span>ngGrid</span>
        </a>
      </li>
    </ul>
  </li>
  <li ng-class="{active:$state.includes('app.form')}">
    <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-edit"></i>
      <span>Form</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Form</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.elements">
          <span>Form elements</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.validation">
          <span>Form validation</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.wizard">
          <span>Form wizard</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.fileupload">
          <span>File upload</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.imagecrop">
          <span>Image crop</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.select">
          <span>Select</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.slider">
          <span>Slider</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.form.editor">
          <span>Editor</span>
        </a>
      </li>
    </ul>
  </li>
  <li ui-sref-active="active">
    <a ui-sref="app.chart">
      <i class="glyphicon glyphicon-signal"></i>
      <span>Chart</span>
    </a>
  </li>
  <li ng-class="{active:$state.includes('app.page')}">
    <a href class="auto">
      <span class="pull-right text-muted">
        <i class="fa fa-fw fa-angle-right text"></i>
        <i class="fa fa-fw fa-angle-down text-active"></i>
      </span>
      <i class="glyphicon glyphicon-file icon"></i>
      <span>Pages</span>
    </a>
    <ul class="nav nav-sub dk">
      <li class="nav-sub-header">
        <a href>
          <span>Pages</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.page.profile">
          <span>Profile</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.page.post">
          <span>Post</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.page.search">
          <span>Search</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.page.invoice">
          <span>Invoice</span>
        </a>
      </li>
      <li ui-sref-active="active">
        <a ui-sref="app.page.price">
          <span>Price</span>
        </a>
      </li>
      <li>
        <a ui-sref="lockme">
          <span>Lock screen</span>
        </a>
      </li>
      <li>
        <a ui-sref="access.signin">
          <span>Signin</span>
        </a>
      </li>
      <li>
        <a ui-sref="access.signup">
          <span>Signup</span>
        </a>
      </li>
      <li>
        <a ui-sref="access.forgotpwd">
          <span>Forgot password</span>
        </a>
      </li>
      <li>
        <a ui-sref="access.404">
          <span>404</span>
        </a>
      </li>
    </ul>
  </li>
<!-- / list -->