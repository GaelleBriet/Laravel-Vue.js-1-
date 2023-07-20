# Use the official Node.js image as the base.
FROM node:alpine3.18

# Set the working directory inside the container.
WORKDIR /app

# Copy the package.json and package-lock.json files to the working directory.
COPY package*.json ./

# Install dependencies.
RUN npm install

# Copy the rest of the app's source code.
COPY ./ ./

# Expose port 5173 for Vite.
EXPOSE 5173

# Start the development server.
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]