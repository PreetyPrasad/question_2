const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

app.get('/api/students', (req, res) => {
    res.json([
        { id: 1, name: 'Nency', age: 22 },
        { id: 2, name: 'Vyana', age: 23 }
    ]);
});

app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
