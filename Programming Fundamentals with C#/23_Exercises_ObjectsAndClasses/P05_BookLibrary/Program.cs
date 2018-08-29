using System;
using System.Collections.Generic;
using System.Globalization;
using System.Linq;

namespace P05_BookLibrary
{
    class Program
    {
        static void Main(string[] args)
        {

            List<Book> books = new List<Book>();

            int n = int.Parse(Console.ReadLine());

            for (int i = 0; i < n; i++)
            {
                string[] tokens = Console.ReadLine()
                    .Split();
                string title = tokens[0];
                string author = tokens[1];
                string publisher = tokens[2];
                DateTime releaseData = DateTime.ParseExact(tokens[3], "dd.MM.yyyy", CultureInfo.InvariantCulture);
                string isbn = tokens[4];
                decimal price = decimal.Parse(tokens[5]);

                Book newBook = new Book(title, author, publisher, releaseData, isbn, price);

                books.Add(newBook);

            }

            Dictionary<string, decimal> authorAndPrices = new Dictionary<string, decimal>();

            foreach (var book in books)
            {

                string author = book.Author;
                decimal price = book.Price;

                if (authorAndPrices.ContainsKey(author) == false)
                {
                    authorAndPrices.Add(author, price);
                }
                else
                {
                    authorAndPrices[author] += price;
                }


            }

            Dictionary<string, decimal> sortedAuthors = authorAndPrices
                .OrderByDescending(a => a.Value)
                .ThenBy(a => a.Key)
                .ToDictionary(x => x.Key, x => x.Value);

            foreach (var author in sortedAuthors)
            {
                Console.WriteLine($"{author.Key} -> {author.Value:f2}");
            }
        }
    }

    class Book
    {
        public Book(string title, string author, string publisher, DateTime releaseDate, string iSBN, decimal price)
        {
            this.Title = title;
            this.Author = author;
            this.Publisher = publisher;
            this.ReleaseDate = releaseDate;
            this.ISBN = iSBN;
            this.Price = price;
        }

        public string Title { get; set; }

        public string Author { get; set; }

        public string Publisher { get; set; }

        public DateTime ReleaseDate { get; set; }

        public string ISBN { get; set; }

        public decimal Price { get; set; }
    }


}
