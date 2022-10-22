          <div class="col-lg-4 mb-5">
              <div class="card h-100 shadow border-0">
                  <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                  <div class="card-body p-4">
                      <div class="badge bg-primary bg-gradient rounded-pill mb-2">News Sensazionale</div>
                      <a class="text-decoration-none link-dark stretched-link"
                          href="{{ route('blog.detail', $item['seo-url']) }}">
                          <div class="h5 card-title mb-3">{{ $item['title'] }}</div>
                      </a>
                      <p class="card-text mb-0">{{ $item['body'] }}</p>
                  </div>
                  <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                      <div class="d-flex align-items-end justify-content-between">
                          <div class="d-flex align-items-center">
                              <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d"
                                  alt="..." />
                              <div class="small">
                                  <div class="fw-bold">Kelly Rowan</div>
                                  <div class="text-muted">March 12, 2022 &middot; 6 min read</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
