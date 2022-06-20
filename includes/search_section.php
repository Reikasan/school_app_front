<section id="search">
    <form action="" class="col-10 offset-1">
        <div class="input-group my-3">
            <input type="text" class="form-control" placeholder="Enter a name" aria-label="Search" aria-describedby="searchBtn">
            <input class="btn btn-outline-secondary" type="submit" id="searchBtn" value="Search">
        </div>
    </form>
    <div class="accordion-flush" id="filters">
        <div class="accordion-item">
            <div class="accordion-header" id="accordionHeading">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
                    Filters
                </button>    
            </div>
            <div id="collapseFilter" class="accordion-collapse collapse pb-3 border-bottom" aria-labelledby="accordingHeading" data-bs-parent="#filters">
                <form action="">
                    <div class="row col-10 offset-1">
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="kids1">
                            <label class="form-check-label" for="course">Kids 1</label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="kids2">
                            <label class="form-check-label" for="course">Kids 2</label>
                        </div>
                    </div>
                    <div class="row col-10 offset-1">
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="basic">
                            <label class="form-check-label" for="course">Basic</label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="intermediate">
                            <label class="form-check-label" for="course">Intermediate</label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="Upper">
                            <label class="form-check-label" for="course">Upper</label>
                        </div>
                        <div class="form-check col-6">
                            <input class="form-check-input" type="checkbox" name="course" value="Professional">
                            <label class="form-check-label" for="course">Professional</label>
                        </div>
                    </div>
                    <div class="row col-6 offset-3 mt-3">
                        <input type="submit" value="Apply Filters">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>