using System;
using System.Collections.Generic;
using System.Text.RegularExpressions;
using System.Linq;

namespace P04_Weather
{
    class Program
    {
        static void Main(string[] args)
        {
            string pattern = @"([A-Z]{2})(\d+.\d+)((?:(?:[A-Z])|(?:[a-z]))+)(?=\|)";
            Regex regex = new Regex(pattern);
            Dictionary<string, Dictionary<string, string>> cities = new Dictionary<string, Dictionary<string, string>>();

            while (true)
            {
                string input = Console.ReadLine();
                if (input == "end")
                {
                    break;
                }

                MatchCollection matches = regex.Matches(input);

                foreach (Match match in matches)
                {
                    string city = match.Groups[1].Value;
                    string temperature = match.Groups[2].Value;
                    string weather = match.Groups[3].Value;

                    if (cities.ContainsKey(city) == false)
                    {
                        cities.Add(city, new Dictionary<string, string>());
                    }

                    cities[city].Add(temperature, weather);                
                }
            }

            foreach (var city in cities.OrderBy(c => c.Value.Keys.Last()))
            {
                string newCity = city.Key;
                string temperature = city.Value.Keys.Last();
                string weather = city.Value.Values.Last();

                Console.WriteLine($"{newCity} => {temperature} => {weather}");
            }
        }
    }
}
