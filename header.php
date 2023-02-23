    <!-- ================================= Header (100vh) ================================= -->

    <header class="p-3 bg-white">

        <div class="row">

            <div class="col-3">
                <img src="logo.png" alt="logo" class="w-50">
            </div>

            <div class="col-6">
                <form method="POST">
                    <div class="input-group">
                        <input type="search" name="search" id="search" class="form-control" placeholder="Search">
                        <select class="border" name="filter_search">
                            <option value="All">All</option>
                            <option value="City">City</option>
                            <option value="Category">Category</option>
                            <option value="Type">Type</option>
                            <option value="Price">Price</option>
                        </select>
                        <button type="submit" class="btn searchbtn border" title="Search"><i class="fas fa-search filtersearch"></i></button>
                    </div>
                </form>
            </div>

            <div class="col-3 d-flex justify-content-end gap-2">
                <button class="btn signin"><span class="h6">SIGN IN</span></button>
                <button class="btn btn-primary signup"><span class="h6">SIGN UP</span></button>
            </div>

        </div>

    </header>

    <div id="image">
        <h1 class="h1 text-center container pt-5 display-1 fw-normal">Buy, rent and sell your properties easily with us!</h1>
    </div>

    <div class="down-arrow" onclick="scrollDown()"></div>