@extends('app.master_dashboard')
@section('content')

	<div class="container-fluid px-4">
                        <h3 class="mt-4">User Account List</h3>
                        <ol class="breadcrumb mb-4">
                             
                        </ol>
                     
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Account List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Name</th>
                                            <th>Balance</th>
                                             
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach($accounts as $i => $account)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{$account->name}}</td>
                                            <td>{{$account->balance}}</td>
                                            <td>
                                                <button  data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$account->id}}" class="btn btn-primary btn-sm" type="button">Make Transaction</button>
                                            </td>
                                        </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter{{$account->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Transaction Form</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('user.makeTransaction') }}" method="POST">
                            @csrf
                                <input type="hidden" name="account_id" value="{{$account->id}}">
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Name</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$account->name}}" disabled>
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Amount</label>
                              <input type="number" min="1" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="Enter amount" required>
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Acount Type</label>
                              <select class="form-select" name="type" aria-label="Default select example" required>
                                   
                                  <option value="">-select type-</option>
                                  <option value="General">General</option>
                                  <option value="Savings">Savings</option>
                                  <option value="Two Type">Two Type</option>
                                  <option value="Three Type">Three Type</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <label for="exampleFormControlInput1" class="form-label">Date</label>
                              <input type="text" class="form-control" name="date" id="exampleFormControlInput1" value="{{ date('d-m-Y') }}" readonly>
                            </div>


                        
                      </div>


                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>

                      </form>
                    </div>
                  </div>
                </div>
                <!-- Modal -->


                                        
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection