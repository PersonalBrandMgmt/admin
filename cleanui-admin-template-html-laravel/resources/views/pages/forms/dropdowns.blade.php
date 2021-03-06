@extends ('layouts.app')

@section('content')
<!-- START: forms/dropdowns -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Dropdowns</strong>
      <a
        href="https://.getbootstrap.com/docs/4.2/components/dropdowns/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-12">
        <h5 class="text-black"><strong>Dropdowns & Colors</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/dropdowns/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <p class="text-muted">
          Modifiers: <code>default</code>, <code>primary</code>, <code>secondary</code>,
          <code>success</code>, <code>info</code>, <code>warning</code>, <code>danger</code>
        </p>
        <p class="text-muted">Color Modifier: <code>.btn-(modifier)</code></p>
        <p class="text-muted">Outline Modifier: <code>.btn-outline-(modifier)</code></p>
        <div class="mb-5">
          <!-- Default color -->
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Clear
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-primary dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Primary
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-secondary dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Secondary
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-success dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Success
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-info dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Info
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-warning dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Warning
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-danger dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Danger
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Default Color -->
          <br />
          <!-- Outline -->
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-primary dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Primary
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-secondary dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Secondary
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-success dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Success
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-info dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Info
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-warning dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Warning
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-outline-danger dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Danger
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Outline -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Alignment</strong></h5>
        <p class="text-muted">Modifier: <code>.dropdown-menu-right</code></p>
        <div class="mb-5">
          <!-- Aligned -->
          <div class="btn-group">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Right aligned dropdown
            </button>
            <div class="dropdown-menu dropdown-menu-right" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Aligned -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Dividers</strong></h5>
        <p class="text-muted">Element: <code>div.dropdown-divider</code></p>
        <div class="mb-5">
          <!-- Dividers -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Dividers -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Headers</strong></h5>
        <p class="text-muted">Element: <code>div.dropdown-header</code></p>
        <div class="mb-5">
          <!-- Headers -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <div class="dropdown-header">Dropdown header</div>
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-header">Dropdown header</div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End headers  -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Icons Menu Item</strong></h5>
        <p class="text-muted">Element: <code>i.dropdown-icon.(icon-class)</code></p>
        <div class="mb-5">
          <!-- Icons Menu Item -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="dropdown-icon icmn-bell" aria-hidden="true"></i> Reply</a
              >
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="dropdown-icon icmn-hour-glass" aria-hidden="true"></i> Share</a
              >
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="dropdown-icon icmn-pie-chart" aria-hidden="true"></i> Delete</a
              >
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="dropdown-icon icmn-box-add" aria-hidden="true"></i> Add</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)"
                ><i class="dropdown-icon icmn-alarm" aria-hidden="true"></i> Settings</a
              >
            </div>
          </div>
          <!-- End Icons Menu Item -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Active Menu Item</strong></h5>
        <p class="text-muted">Modifier: <code>.active</code></p>
        <div class="mb-5">
          <!-- Active Menu Item -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Active menu item</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item active" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Active Menu Item -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Disabled Menu Item</strong></h5>
        <p class="text-muted">Modifier: <code>.disabled</code></p>
        <div class="mb-5">
          <!-- Disabled Menu Item  -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item disabled" href="javascript: void(0)">Disabled menu item</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- Ena Disabled Menu Item -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Sizing</strong></h5>
        <p class="text-muted">Modifier: <code>.btn-lg</code>, <code>.btn-sm</code>,</p>
        <div class="mb-5">
          <!-- Sizing -->
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-lg btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Large
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Normal
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <div class="dropdown d-inline-block mb-2 mr-2">
            <button
              type="button"
              class="btn btn-sm btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Small
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Sizing -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Split Buttons</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://.getbootstrap.com/docs/4.2/components/dropdowns/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <!-- Split Buttons -->
          <div class="btn-group">
            <button type="button" class="btn btn-default">Default</button>
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Action</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Another action</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"
                >Something else here</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">Separated link</a>
            </div>
          </div>
          <!-- End Split Buttons -->
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Animation</strong></h5>
        <p class="text-muted">Modifier: <code>.dropdown-animate</code></p>
        <div class="mb-5">
          <!-- Animation -->
          <div class="dropdown">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu dropdown-animate" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Animation -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h5 class="text-black"><strong>Dropup</strong></h5>
        <p class="text-muted">Modifier: <code>.dropup</code></p>
        <div class="mb-5">
          <!-- Dropup -->
          <div class="dropdown dropup">
            <button
              type="button"
              class="btn btn-default dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Default
            </button>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </div>
          </div>
          <!-- End Dropup -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/dropdowns -->

@endsection