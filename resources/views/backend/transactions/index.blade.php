@extends('app.master_dashboard')
@section('content')

	<div class="container-fluid px-4">
                        <h3 class="mt-4">User Account List</h3>
                        <ol class="breadcrumb mb-4">
                             
                        </ol>
                     
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Transaction List Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>SL.</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Transaction Date</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>

                                        @foreach($transactions as $i => $transaction)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td>{{$transaction->account->name}}</td>
                                            <td>{{$transaction->amount}}</td>
                                            <td>{{ $transaction->date }}</td>
                                            <td>{{$transaction->type}}</td>
                                            <td>
                                                <span class="badge bg-success darked">Success</span>
                                            </td>
                                        </tr>

                 
                                        
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

@endsection