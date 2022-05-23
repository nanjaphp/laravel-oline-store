@extends('layouts.dashboard')

@section('title')
    Налаштування аккаунта
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Мій аккаунт</h2>
      <p class="dashboard-subtitle">
          Оновіть свій профіль
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form id="locations" action="{{ route('dashboard-settings-redirect','dashboard-settings-account') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Ваше Ім'я</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ $user->name }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Ваша електронна адреса</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ $user->email }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address_one">Адреса 1</label>
                      <input
                        type="text"
                        class="form-control"
                        id="address_one"
                        name="address_one"
                        value="{{ $user->address_one }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="address_two">Адреса 2</label>
                      <input
                        type="text"
                        class="form-control"
                        id="address_two"
                        name="address_two"
                        value="{{ $user->address_two }}"
                      />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="region_id">Область</label>
                      <select name="region_id" id="region_id" class="form-control" v-model="region_id" v-if="regions">
                        <option v-for="region in regions" :value="region.id">@{{ region.name }}</option>
                      </select>
                      <select v-else class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="city_id">Місто</label>
                      <select name="city_id" id="city_id" class="form-control" v-model="city_id" v-if="cities">
                        <option v-for="city in cities" :value="city.id">@{{city.name }}</option>
                      </select>
                      <select v-else class="form-control"></select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="zip_code">Поштовий індекс</label>
                      <input
                        type="text"
                        class="form-control"
                        id="zip_code"
                        name="zip_code"
                        value="{{ $user->zip_code }}"
                      />
                    </div>
                  </div>
{{--                  <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                      <label for="country">Країна</label>--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control"--}}
{{--                        id="country"--}}
{{--                        name="country"--}}
{{--                        value="{{ $user->country }}"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="phone_number">Номер телефону</label>
                      <input
                        type="text"
                        class="form-control"
                        id="phone_number"
                        name="phone_number"
                        value="{{ $user->phone_number }}"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Зберегти
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          this.getProvincesData();
          this.updateRegionAndCity();
        },
        data: {
          regions: null,
          cities: null,
          region_id: null,
          city_id: null,
        },
        methods: {
            updateRegionAndCity() {
                this.region_id = {{$user->region_id ?? 'null'}};
                this.city_id = {{$user->city_id ?? 'null'}};
            },
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-regions') }}')
              .then(function (response) {
                  self.regions = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/cities') }}/' + self.region_id)
              .then(function (response) {
                  self.cities = response.data;
              })
          },
        },
        watch: {
          region_id: function (val, oldVal) {
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush
