using System;
using System.Collections.Generic;
using System.Linq;

namespace P10_СръбскоUnleashed
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, long> place = new Dictionary<string, long>();
            Dictionary<string, Dictionary<string, int>> singers
                = new Dictionary<string, Dictionary<string, int>>();


            while (true)
            {
                List<string> input = Console.ReadLine()
                    .Split('@')
                    .ToList();

                if (input[0] == "End")
                {
                    break;
                }

                string singer = input[0].TrimEnd();
                string temp = input[1];

                List<string> placeAndMoney = temp
                    .Split(' ')
                    .ToList();
                try
                {
                    int tickets = int.Parse(placeAndMoney[placeAndMoney.Count - 1]);
                    placeAndMoney.Remove(placeAndMoney[placeAndMoney.Count - 1]);
                    int price = int.Parse(placeAndMoney[placeAndMoney.Count - 1]);
                    placeAndMoney.Remove(placeAndMoney[placeAndMoney.Count - 1]);
                    int totalMoney = tickets * price;
                    string thePlace = string.Join(" ", placeAndMoney).TrimEnd();
                    if (place.ContainsKey(thePlace) == false)
                    {
                        place.Add(thePlace, 0);
                        singers.Add(thePlace, new Dictionary<string, int>());
                    }

                    place[thePlace] += totalMoney;

                    if (singers[thePlace].ContainsKey(singer) == false)
                    {
                        singers[thePlace].Add(singer, 0);
                    }

                    singers[thePlace][singer] += totalMoney;

                }
                catch (Exception)
                {

                    continue;
                }
            }
            foreach (var city in place)
            {
                Console.WriteLine($"{city.Key}");

                Dictionary<string, int> stars = singers[city.Key]
                    .ToDictionary(x => x.Key, x => x.Value);

                foreach (var singer in stars.OrderByDescending(x => x.Value))
                {
                    Console.WriteLine($"#  {singer.Key} -> {singer.Value}");
                }
            }

        }
    }
}
