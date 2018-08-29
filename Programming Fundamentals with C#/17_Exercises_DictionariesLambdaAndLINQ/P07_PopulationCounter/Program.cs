using System;
using System.Collections.Generic;
using System.Linq;

namespace P07_PopulationCounter
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, long> totalPopolation
                = new Dictionary<string, long>();
            Dictionary<string, Dictionary<string, long>> countriesAndCities
                = new Dictionary<string, Dictionary<string, long>>();
            while (true)
            {
                string line = Console.ReadLine();
                if ("report" == line)
                {
                    break;
                }

                string[] tokens = line.Split('|');
                string country = tokens[1];
                string city = tokens[0];
                long popolation = long.Parse(tokens[2]);

                if (!totalPopolation.ContainsKey(country))
                {
                    totalPopolation.Add(country, 0);
                    countriesAndCities.Add(country, new Dictionary<string, long>());
                }

                totalPopolation[country] += popolation;
                countriesAndCities[country].Add(city, popolation);


            }
            foreach (var count in totalPopolation.OrderByDescending(x => x.Value))
            {
                Console.WriteLine($"{count.Key} (total population: {count.Value})");

                Dictionary<string, long> cities = countriesAndCities[count.Key]
                    .OrderByDescending(x => x.Value)
                    .ToDictionary(x => x.Key, x => x.Value);

                foreach (var item in cities)
                {
                    Console.WriteLine($"=>{item.Key}: {item.Value}");
                }
            }
        }
    }
}
