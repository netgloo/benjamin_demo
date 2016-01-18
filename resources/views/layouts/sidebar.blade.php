<!-- Left side column -->
<aside class="main-sidebar">

  <div class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="treeview {{ $active === 'index' ? 'active' : '' }}">
        <a href="{{ trlink('/') }}">
          <i class="fa fa-home"></i> 
          <span>Index</span>
        </a>
      </li>

      <li class="treeview {{ substr($active, 0, 6) === 'folder' ? 'active' : '' }}">
        <a href="{{ trlink('/folder/page1') }}">
          <i class="fa fa-folder-open"></i>
          <span>Folder</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{ $active === 'folder.page1' ? 'active' : '' }}">
            <a href="{{ trlink('/folder/page1') }}">
              <i class="fa fa-circle-o"></i> 
              Page 1
            </a>
          </li>
          <li class="{{ $active === 'folder.page2' ? 'active' : '' }}">
            <a href="{{ trlink('/folder/page2') }}">
              <i class="fa fa-circle-o"></i> 
              Page 2
            </a>
          </li>
          <li class="{{ $active === 'folder.page3' ? 'active' : '' }}">
            <a href="{{ trlink('/folder/page3') }}">
              <i class="fa fa-circle-o"></i> 
              Page 3
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ $active === 'scripts' ? 'active' : '' }}">
        <a href="{{ trlink('/scripts') }}">
          <i class="fa fa-cogs"></i>
          <span>Scripts</span>
        </a>
      </li>

      <li class="treeview {{ $active === 'gallery' ? 'active' : '' }}">
        <a href="{{ trlink('/gallery') }}">
          <i class="fa fa-photo"></i>
          <span>Images</span>
        </a>
      </li>

      <li class="treeview {{ substr($active, 0, 11) === 'transitions' ? 'active' : '' }}">
        <a href="{{ trlink('/transitions/') }}">
          <i class="fa fa-exchange"></i>
          <span>Transitions</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li class="{{ $active === 'transitions.one' ? 'active' : '' }}">
            <a href="{{ trlink('/transitions/one') }}">
              <i class="fa fa-circle-o"></i> 
              One
            </a>
          </li>
          <li class="{{ $active === 'transitions.two' ? 'active' : '' }}">
            <a href="{{ trlink('/transitions/two') }}">
              <i class="fa fa-circle-o"></i> 
              Two
            </a>
          </li>
          <li class="{{ $active === 'transitions.three' ? 'active' : '' }}">
            <a href="{{ trlink('/transitions/three') }}">
              <i class="fa fa-circle-o"></i> 
              Three
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview {{ $active === 'localization' ? 'active' : '' }}">
        <a href="{{ trlink('/localization') }}">
          <i class="fa fa-globe"></i> 
          <span>Localization</span>
        </a>
      </li>

      <li class="treeview {{ $active === 'coffee' ? 'active' : '' }}">
        <a href="{{ trlink('/coffee') }}">
          <i class="fa fa-coffee"></i> 
          <span>Coffee</span>
        </a>
      </li>

    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->
</aside><!-- /.main-sidebar -->
