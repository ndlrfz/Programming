console.log("Hello JS")

const data = [
    {
        id: 1,
        title: "Sousou no Frieren",
        pubDate: "20-09-2023",
        score: 9.3,
        genres: ["Adventure", "Drama", "Fantasy"]
    },
    {
        id: 2,
        title: "Fullmetal Alchemist: Brotherhood",
        pubDate: "05-04-2009",
        score: 9.1,
        genres: ["Action", "Adventure", "Drama", "Fantasy"]
    },
    {
        id: 3,
        title: "Steins;Gate",
        pubDate: "06-05-2011",
        score: 9.07,
        genres: ["Drama", "Sci-Fi", "Suspense"]
    },
    {
        id: 4,
        title: "Shingeki no Kyojin Season 3 Part 2",
        pubDate: "09-05-2019",
        score: 9.05,
        genres: ["Action", "Drama", "Suspense"]
    },
]

function getAnimeAll() {
    return data;
}

function getAnime(id) {
    return data.find((d) => d.id === id);
}

// basic operation
const favMovie = getAnime(1)
console.log(favMovie)

console.log(favMovie.title)
console.log(favMovie.genres)
console.log(favMovie.score)

// NOTE: Deconstructuring an object.
// the variable title, score, and genres must matched with the object properties
// Deconstruct an object with {} - curly bracket
const { title, score, genres } = favMovie;
console.log(title, score, genres)
console.log(`My fav anime is ${title} with score ${score} and genres is ${genres}`)

// NOTE: Deconstructuring an array
console.log(genres[0])
console.log(genres[1])
console.log(genres[2])

// Deconstruct an array with [] - squre bracket
const [firstGenre, secondGenre] = genres;
console.log(firstGenre, secondGenre)
console.log(`So the first genre is "${firstGenre}" and the second genre is "${secondGenre}"`)

// NOTE: Rest operator with ... (three dots)
// otherGenres will print an array of second and third genres
// Rest operator can only be used at the end of array
const [primaryGenre, ...otherGenres] = genres;
console.log(primaryGenre, otherGenres)

// NOTE: Spread operator with ... (three dots) to extend or expand iterables like an array to individual element.
// add Magic and Time Travel to "genres" and create newGenres
const newGenres = ["Magic", "Time Travel", ...genres]
console.log(newGenres)

// Spread operator can be placed at start, middle, or the end
const myNewGenres = ["Magic", ...genres, "Time Travel"]
console.log(myNewGenres)
