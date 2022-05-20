@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transaction Detail
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">#{{ $transaction->code }}</h2>
      <p class="dashboard-subtitle">
          Деталі транзакцій
      </p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img
                    src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                    class="w-100 mb-3"
                    alt=""
                  />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Ім'я клієнта</div>
                      <div class="product-subtitle">{{ $transaction->transaction->user->name }}</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Назва продукту</div>
                      <div class="product-subtitle">
                        {{ $transaction->product->name }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                          Дата транзакції
                      </div>
                      <div class="product-subtitle">
                        {{ $transaction->created_at }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Статус платежу</div>
                      <div class="product-subtitle text-danger">
                        {{ $transaction->transaction->transaction_status }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                          Загальна кількість
                      </div>
                      <div class="product-subtitle">
                        ${{ number_format($transaction->transaction->total_price) }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Номер телефону
                      </div>
                      <div class="product-subtitle">
                        {{ $transaction->transaction->user->phone_number }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <form action="{{ route('dashboard-transaction-update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-12 mt-4">
                    <h5>Інформація доставки</h5>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <div class="product-title">Адреса I</div>
                        <div class="product-subtitle">
                          {{ $transaction->transaction->user->address_one }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Адреса II</div>
                        <div class="product-subtitle">
                          {{ $transaction->transaction->user->address_two }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Province</div>
                        <div class="product-subtitle">
                          {{ App\Models\Province::find($transaction->transaction->user->provinces_id)->name }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Місто</div>
                        <div class="product-subtitle">
                          {{ App\Models\Regency::find($transaction->transaction->user->regencies_id)->name }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Індексний код</div>
                        <div class="product-subtitle">{{ $transaction->transaction->user->zip_code }}</div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="product-title">Країна</div>
                        <div class="product-subtitle">{{ $transaction->transaction->user->country }}</div>
                      </div>
                      <div class="col-12 col-md-3">
                        <div class="product-title">Статус достаки</div>
                        <select
                          name="shipping_status"
                          id="status"
                          class="form-control"
                          v-model="status"
                        >
                          <option value="PENDING">Pending</option>
                          <option value="SHIPPING">Shipping</option>
                          <option value="SUCCESS">Success</option>
                        </select>
                      </div>
                      <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                          <div class="product-title">Input Resi</div>
                          <input
                            type="text"
                            class="form-control"
                            name="resi"
                            v-model="resi"
                          />
                        </div>
                        <div class="col-md-2">
                          <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                          >
                            Update Resi
                          </button>
                        </div>
                      </template>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-lg mt-4"
                    >
                      Зберегти
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "{{ $transaction->shipping_status }}",
        resi: "{{ $transaction->resi }}",
      },
    });
  </script>
@endpush
