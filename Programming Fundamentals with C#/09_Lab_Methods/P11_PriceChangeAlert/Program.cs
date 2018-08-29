using System;

namespace P11_PriceChangeAlert
{
    class Program
    {
        static void Main(string[] args)
        {
            int numberOfPrices = int.Parse(Console.ReadLine());
            double threshold = double.Parse(Console.ReadLine());


            double lastPrice = double.Parse(Console.ReadLine());

            for (int i = 0; i < numberOfPrices - 1; i++)
            {
                double newPrice = double.Parse(Console.ReadLine());

                double difference = Proc(lastPrice, newPrice);
                bool isSignificantDifference = isDifference(difference, threshold);

                string message = GetMessage(newPrice, lastPrice, difference, isSignificantDifference);

                Console.WriteLine(message);

                lastPrice = newPrice;
            }
        }

        private static string GetMessage(double newPrice, double lastPrice, double difference, bool etherTrueOrFalse)
        {
            string to = "";
            if (difference == 0)
            {
                to = string.Format("NO CHANGE: {0}", newPrice);
            }
            else if (!etherTrueOrFalse)
            {
                to = string.Format("MINOR CHANGE: {0} to {1} ({2:F2}%)", lastPrice, newPrice, difference * 100);
            }
            else if (etherTrueOrFalse && (difference > 0))
            {
                to = string.Format("PRICE UP: {0} to {1} ({2:F2}%)", lastPrice, newPrice, difference * 100);
            }
            else if (etherTrueOrFalse && (difference < 0))
                to = string.Format("PRICE DOWN: {0} to {1} ({2:F2}%)", lastPrice, newPrice, difference * 100);
            return to;
        }

        private static bool isDifference(double granica, double isDiff)
        {
            if (Math.Abs(granica) >= isDiff)
            {
                return true;
            }
            return false;
        }

        private static double Proc(double lastPrice, double newPrice)
        {
            double result = (newPrice - lastPrice) / lastPrice;
            return result;
        }
    }
}
