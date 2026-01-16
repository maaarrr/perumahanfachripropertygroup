<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacilityResource\Pages;
use App\Models\Facility;
use App\Models\Property;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FacilityResource extends Resource
{
    protected static ?string $model = Facility::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    
    protected static ?string $navigationLabel = 'Fasilitas';
    
    protected static ?string $pluralLabel = 'Fasilitas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('property_id')
                    ->label('Perumahan')
                    ->relationship('property', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),

                Forms\Components\Select::make('icon')
                    ->label('Icon Fasilitas')
                    ->options([
                        'fas fa-home' => 'Rumah',
                        'fas fa-car' => 'Mobil',
                        'fas fa-swimming-pool' => 'Kolam Renang',
                        'fas fa-tree' => 'Taman',
                        'fas fa-wifi' => 'WiFi',
                        'fas fa-bed' => 'Tempat Tidur',
                        'fas fa-bath' => 'Kamar Mandi',
                        'fas fa-parking' => 'Parkir',
                        'fas fa-shield-alt' => 'Keamanan',
                        'fas fa-store' => 'Mini Market',
                        'fas fa-utensils' => 'Ruang Makan',
                        'fas fa-dumbbell' => 'Gym',
                        'fas fa-bus' => 'Akses Transportasi',
                        'fas fa-school' => 'Dekat Sekolah',
                        'fas fa-hospital' => 'Dekat Rumah Sakit',
                        'fas fa-mosque' => 'Mushola',
                        'fas fa-church' => 'Gereja',
                        'fas fa-bolt' => 'Listrik',
                        'fas fa-water' => 'Air Bersih',
                        'fas fa-cctv' => 'CCTV',
                        'fas fa-lock' => 'One Gate System',
                        'fas fa-fire-extinguisher' => 'Pemadam',
                        'fas fa-leaf' => 'Lingkungan Asri',
                        'fas fa-road' => 'Jalan Lebar',
                        'fas fa-bicycle' => 'Jalur Sepeda',
                        'fas fa-child' => 'Taman Bermain',
                        'fas fa-dog' => 'Pet Friendly',
                        // Tambahkan lagi sesuai kebutuhan
                    ])
                    ->searchable()
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->placeholder('Contoh: Bangunan Tunggal')
                    ->rows(3),
                
                Forms\Components\TextInput::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->helperText('Semakin kecil angka, semakin atas posisinya'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('property.name')
                    ->label('Perumahan')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('icon')
                    ->label('Icon')
                    ->html()
                    ->formatStateUsing(fn (string $state): string => "<i class='$state'></i> $state"),
                
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\SelectFilter::make('property_id')
                    ->label('Perumahan')
                    ->relationship('property', 'name'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFacilities::route('/'),
            'create' => Pages\CreateFacility::route('/create'),
            'edit' => Pages\EditFacility::route('/{record}/edit'),
        ];
    }
}