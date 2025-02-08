CREATE TABLE
    roles (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        badge VARCHAR(255)
    );

CREATE TABLE
    skills (id SERIAL PRIMARY KEY, name VARCHAR(255) NOT NULL);

CREATE TABLE
    users (
        id SERIAL PRIMARY KEY,
        firstname VARCHAR(255) NOT NULL,
        lastname VARCHAR(255) NOT NULL,
        email VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        phone VARCHAR(20) UNIQUE,
        photo VARCHAR(255)
    );

CREATE TABLE
    user_roles (
        user_id INT REFERENCES users (id) ON DELETE CASCADE,
        role_id INT REFERENCES roles (id) ON DELETE CASCADE,
        PRIMARY KEY (user_id, role_id)
    );

CREATE TABLE
    user_skills (
        user_id INT REFERENCES users (id) ON DELETE CASCADE,
        skill_id INT REFERENCES skills (id) ON DELETE CASCADE,
        PRIMARY KEY (user_id, skill_id)
    );

CREATE TABLE
    messages (
        id SERIAL PRIMARY KEY,
        content TEXT NOT NULL,
        expediteur_id INT REFERENCES users (id) ON DELETE CASCADE,
        destinataire_id INT REFERENCES users (id) ON DELETE CASCADE,
        created_at TIMESTAMP DEFAULT NOW ()
    );

CREATE TABLE
    categories (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT
    );

CREATE TABLE
    tags (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT
    );

CREATE TABLE
    projets (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        description TEXT,
        budget FLOAT,
        duration INT,
        category_id INT REFERENCES categories (id) ON DELETE SET NULL
    );

CREATE TABLE
    projet_tags (
        projet_id INT REFERENCES projets (id) ON DELETE CASCADE,
        tag_id INT REFERENCES tags (id) ON DELETE CASCADE,
        PRIMARY KEY (projet_id, tag_id)
    );

CREATE TABLE
    offres (
        id SERIAL PRIMARY KEY,
        projet_id INT REFERENCES projets (id) ON DELETE CASCADE,
        budget FLOAT NOT NULL
    );

CREATE TABLE
    contrats (
        id SERIAL PRIMARY KEY,
        contenu TEXT,
        freelancer_id INT REFERENCES users (id) ON DELETE CASCADE,
        client_id INT REFERENCES users (id) ON DELETE CASCADE,
        created_date DATE DEFAULT CURRENT_DATE
    );

CREATE TABLE
    factures (
        id SERIAL PRIMARY KEY,
        user_id INT REFERENCES users (id) ON DELETE CASCADE,
        duration INT,
        date DATE DEFAULT CURRENT_DATE,
        projet_id INT REFERENCES projets (id) ON DELETE CASCADE
    );

CREATE TABLE
    paiements (
        id SERIAL PRIMARY KEY,
        facture_id INT REFERENCES factures (id) ON DELETE CASCADE,
        paiement_date DATE DEFAULT CURRENT_DATE
    );