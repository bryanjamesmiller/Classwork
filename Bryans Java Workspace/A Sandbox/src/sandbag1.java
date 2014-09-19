
public class sandbag1 {
	public static void main(String [] args) {
		
		int[][] values = new int[3][3];

		boolean[] isNumberAvailable = new boolean[9];    

		for(int i=0; i<3*3; i++)
			isNumberAvailable[i]=true;

		for (int row = 0; row < 3; row++) 
		{
			for (int col = 0; col < 3; col++) 
				values[row][col] = 0;  
		}

		
		int testNum = (1 + (int)((9-1+1) * Math.random()));
		for(int i=0; i<3; i++)
		{
			do{
				if(isNumberAvailable[testNum-1]){
					values[0][i]=testNum;
					isNumberAvailable[testNum-1]=false;
				}
					
				else
					testNum = (1 + (int)((9-1+1) * Math.random()));
				
			} while(!isNumberAvailable[testNum-1]);
			System.out.println("The numbers in the first row are: " + values[0][i]);
		}		
	}
	
}
