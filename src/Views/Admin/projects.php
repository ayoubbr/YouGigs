    <div class="header">
        <h1 class="page-title">Projects Management</h1>
        <!-- <button class="add-project-btn">
            <i class="fas fa-plus"></i>
            Add New Project
        </button> -->
    </div>

    <!-- <div class="filters-bar">
        <div class="search-box">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search projects...">
        </div>
        <div class="filter-options">
            <select class="filter-select">
                <option value="">Status</option>
                <option value="active">Active</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
            <select class="filter-select">
                <option value="">Category</option>
                <option value="web">Web Development</option>
                <option value="mobile">Mobile Apps</option>
                <option value="design">Design</option>
            </select>
            <select class="filter-select">
                <option value="">Sort By</option>
                <option value="newest">Newest First</option>
                <option value="oldest">Oldest First</option>
                <option value="budget-high">Budget: High to Low</option>
                <option value="budget-low">Budget: Low to High</option>
            </select>
        </div>
    </div> -->

    <div class="projects-grid">
        <div class="project-card">
            <div class="project-card-header">
                <h2 class="project-title">E-commerce Website Development</h2>
                <span class="project-status status-active">Active</span>
            </div>
            <div class="project-info">
                <div class="info-item">
                    <i class="fas fa-user"></i>
                    <span>Client: John Doe</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Budget: $2,500</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>Due: March 15, 2025</span>
                </div>
            </div>
            <p class="project-description">
                Building a modern e-commerce platform with React and Node.js. Includes payment integration and responsive design.
            </p>
            <div class="project-tags">
                <span class="tag">React</span>
                <span class="tag">Node.js</span>
                <span class="tag">MongoDB</span>
            </div>
            <div class="project-actions">
                <button class="action-btn edit-btn">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-btn">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>

        <div class="project-card">
            <div class="project-card-header">
                <h2 class="project-title">Mobile App UI/UX Design</h2>
                <span class="project-status status-pending">Pending</span>
            </div>
            <div class="project-info">
                <div class="info-item">
                    <i class="fas fa-user"></i>
                    <span>Client: Sarah Smith</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Budget: $1,800</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>Due: April 1, 2025</span>
                </div>
            </div>
            <p class="project-description">
                Design a fitness tracking mobile app including wireframes, prototypes, and final designs.
            </p>
            <div class="project-tags">
                <span class="tag">Figma</span>
                <span class="tag">UI/UX</span>
                <span class="tag">iOS</span>
            </div>
            <div class="project-actions">
                <button class="action-btn edit-btn">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-btn">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="pagination">
        <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
    </div>