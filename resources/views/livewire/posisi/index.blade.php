<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Posisi</h4>
                </div>
                
                <div class="card-footer text-center">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8">
                                <div wire:ignore id='map' style='width: 100%; height: 400px;'></div>
                            </div>
                            <div class="card-body">
                                <h4>Koordinat</h4>
                                <div class="form-group">
                                    <label>Longtitude</label>
                                    <input wire:model="long" type="text" class="form-control">
                                    <label>Lattitude</label>
                                    <input wire:model="lat" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            
                        
                    </div>
                    
                    @push('scripts')
                    
                    <script>
                        document.addEventListener('livewire:load', () => {
                            const defaultLocation = [107.59553394562141, -6.951939580144085]
                      mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
                      var map = new mapboxgl.Map({
                        container: 'map',
                        center: defaultLocation,
                        zoom: 11.15,
                        style: 'mapbox://styles/mapbox/streets-v11'
                      });
                        

                      //search
                      map.addControl(
                          new MapboxGeocoder({
                              accessToken: mapboxgl.accessToken,
                              mapboxgl: mapboxgl
                          })
                      )

                      map.addControl(new mapboxgl.NavigationControl())

                      map.on('click', (e) => {
                          const longtitude = e.lngLat.lng
                          const lattitude = e.lngLat.lat

                          console.log({longtitude, lattitude});
                          @this.long = longtitude
                          @this.lat = lattitude
                      })


                        })
                      
                    </script>
                    
                    @endpush

                </div>
            </div>
        </div>
    </div>
</div>