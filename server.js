// server.js
const express = require('express');
const mongoose = require('mongoose');
const path = require('path');

const app = express();
const PORT = process.env.PORT || 3000;

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/adminPortal', { useNewUrlParser: true, useUnifiedTopology: true })
    .then(() => console.log('Connected to MongoDB'))
    .catch(err => console.error('Error connecting to MongoDB:', err));

// Define a schema and model for admins
const adminSchema = new mongoose.Schema({
    username: String,
    password: String
});

const Admin = mongoose.model('Admin', adminSchema);

// Serve static files from the public directory
app.use(express.static(path.join(__dirname, 'public')));

// Route to serve the admin.html file
app.get('/admin', (req, res) => {
    res.sendFile(path.join(__dirname, 'admin.html'));
});

app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
