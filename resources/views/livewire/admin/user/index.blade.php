<div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><i class="fas fa-user mr-2"></i>@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home mr-1"></i>Dashboard</a></li>
              <li class="breadcrumb-item active"><i class="fas fa-user mr-1"></i>@yield('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <div>
              <button class="btn btn-primary"><i class="fas fa-plus mr-2"></i>Add Data</button>
            </div>
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-print mr-1"></i> Print
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item text-success" href="#"><i class="fas fa-file-excel mr-1"></i> Excel</a>
                <a class="dropdown-item text-danger" href="#"><i class="fas fa-file-pdf mr-1"></i> PDF</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3 justify-content-between">
            <div class="col-2">
              <select class="form-control" wire:model.live="paginate">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
            </div>
            <div class="col-6">
              <input type="text" class="form-control" placeholder="Search..." wire:model.live="search">
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col"><i class="fas fa-cog"></i></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      @if ($item->role == 'admin')
                        <td>
                          <span class="badge badge-info">
                            {{ $item->role }}
                          </span>
                        </td>
                      @elseif ($item->role == 'staff')
                        <td>
                          <span class="badge badge-secondary">
                            {{ $item->role }}
                          </span>
                        </td>
                      @endif
                      <td>
                        <button class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
            <div>
              {{ $user->links() }}
            </div>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
</div>
