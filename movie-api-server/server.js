const express = require('express');
const cors = require('cors');
const movies = require('./movies');

const app = express(); // 익스프레스 서버 생성

const port = 5000; // 서버 포트 설정

app.use(cors());

// 서버는 무엇을 해야 하나?
// 클라이언트의 요청을 처리


// 영화 목록을 요청하면 영화목록 데이터를 보낸다.
app.get('/api/movies', (req, res)=>{
    res.json(movies);
});

// 특정한 영화 요청하면 요천항 영화를 보낸다
app.get('/api/movies/:id', (req, res)=>{
    const movieId = parseInt(req.params.id,10);
    const movie = movies.find(m=>m.id === movieId)
    if(movie){
    res.json(movies);
    }else{
        res.status(404).send("해당 영화는 없습니다.");
    }
});

app.listen(port, ()=>{
    console.log(`Movie API server listening at http://localhost:${port}`);
})