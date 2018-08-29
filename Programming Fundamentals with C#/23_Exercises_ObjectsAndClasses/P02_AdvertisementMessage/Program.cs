using System;

namespace P02_AdvertisementMessage
{
    class Program
    {
        static void Main(string[] args)
        {
            int input = int.Parse(Console.ReadLine());

            string[] phrases = { "Excellent product.", "Such a great product.", "I always use that product."
                    , "Best product of its category.", "Exceptional product.", "I can’t live without this product." };
            string[] events = { "Now I feel good.", "I have succeeded with this product."
                    , "Makes miracles. I am happy of the results!", "I cannot believe but now I feel awesome."
                    , "Try it yourself, I am very satisfied.", "I feel great!" };
            string[] author = { "Diana", "Petya", "Stella", "Elena", "Katya", "Iva", "Annie", "Eva" };
            string[] cities = { "Burgas", "Sofia", "Plovdiv", "Varna", "Ruse" };

            for (int i = 0; i < input; i++)
            {
                Random num = new Random();

                int phraseNum = num.Next(phrases.Length);
                int eventNum = num.Next(events.Length);
                int authorNum = num.Next(author.Length);
                int cityNum = num.Next(cities.Length);

                Console.WriteLine($"{phrases[phraseNum]} {events[eventNum]} {author[authorNum]} – {cities[cityNum]}.");
            }
        }
    }
}
